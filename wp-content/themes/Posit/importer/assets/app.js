jQuery(document).ready(function ($) {
    const modalTransitionDuration = 100

    const $modal = $('[data-markdown-import-modal]')
    const $openModalBtn = $('[data-open-md-import-modal]')

    const $selectAll = $modal.find('[data-select-all]')
    const $postsCount = $modal.find('[data-posts-count]')
    const $importAllBtn = $modal.find('[data-import-all]')
    const $closeModalBtn = $modal.find('[data-close-modal]')
    const $postsContainer = $modal.find('[data-posts-container]')
    const $importSelectedBtn = $modal.find('[data-import-selected]')

    const $modalActions = $modal.find('.modal-actions')
    const $selectAllContainer = $selectAll.closest('.select-all')

    const insertImportOptions = (posts = []) => {
        $postsContainer.empty()

        if (!posts.length) {
            $modalActions.hide()
            $selectAllContainer.hide()
            $postsContainer.append('<li class="post-row">There aren\'t any new posts.</li>')
            return
        }
        $modalActions.show()
        $selectAllContainer.show()
        $postsCount.text(posts.length)

        posts.forEach((post) => {
            const authors = (post.authors || []).join(', ')
            const $postRow = $(`
                <li class='post-row'>
                    <div class='post-info'>
                        <p class='p-title'>${post.post_title}</p>
                        <p class='p-description'>
                            <i>${post.post_excerpt}</i>
                            </br><i>- ${authors}</i>
                        </p>
                    </div>
                    <input type="checkbox" data-post-slug='${post.post_name}' ${!post.post_name ? 'disabled' : ''}>
                </li>
            `)
            $postsContainer.append($postRow)
        })
    }

    const toggleLoadState = () => {
        $importAllBtn.prop('disabled', !$importAllBtn.prop('disabled'))
        $importSelectedBtn.prop('disabled', !$importSelectedBtn.prop('disabled'))

        $modalActions.find('span').length
            ? $modalActions.find('span').remove()
            : $modalActions.prepend('<span>Importing...</span>')
    }

    const syncMarkdownPosts = (fetchOnly = true, slugs = false) => {
        if (!fetchOnly) toggleLoadState()

        $.ajax({
            type: 'post',
            url: ajaxUrl.url,
            data: {
                slugs: slugs,
                dryRun: fetchOnly,
                nonce: ajaxUrl.nonce,
                action: ajaxUrl.action,
                postType: $modal.data('postType') || 'post',
            },
            success: (response) => {
                const updatesMarkup = fetchOnly && response.data

                if (updatesMarkup) {
                    insertImportOptions(response.data)
                } else if (response?.success) {
                    location.reload()
                } else {
                    console.error(response) // eslint-disable-line no-console
                }
            },
            error: () => alert('Unable to fetch new posts'),
        })
    }

    const openModal = () => {
        syncMarkdownPosts()
        $modal.fadeIn(modalTransitionDuration)
    }

    const closeModal = () => $modal.fadeOut(modalTransitionDuration)

    const selectAllPosts = (ev) => {
        const checked = ev.currentTarget.checked
        $modal.find('input[type="checkbox"]').attr('checked', checked)
    }

    const importSelected = () => {
        const postSlugs = []
        const $selected = $modal.find('input[data-post-slug][type="checkbox"]:is(:checked)')

        $selected.each(function () {
            const slug = this.dataset.postSlug
            if (slug) {
                postSlugs.push(slug)
            }
        })

        if (postSlugs.length) {
            syncMarkdownPosts(false, postSlugs)
        }
    }

    const importAll = () => syncMarkdownPosts(false)

    const init = () => {
        $importAllBtn.on('click', importAll)
        $openModalBtn.on('click', openModal)
        $closeModalBtn.on('click', closeModal)
        $selectAll.on('click', selectAllPosts)
        $importSelectedBtn.on('click', importSelected)
    }

    init() // Init all listeners
})
