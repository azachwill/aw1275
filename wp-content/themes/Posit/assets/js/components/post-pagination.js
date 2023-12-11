import shareModal from './share-modal'

const defaultPostsPerPage = -1

jQuery(document).ready(function ($) {
    const $paginationContainer = $('.post-pagination-container')

    const setConfigPaginationButtons = (data) => {
        const $pagination = $('.pagination-container')
        const $changePagesButtons = $pagination.find('.pagination-page')

        if ($changePagesButtons) {
            const $prevBtn = $pagination.find('.prev')
            const $nextBtn = $pagination.find('.next')

            $changePagesButtons.each((index, button) => {
                const page = $(button).data('page-number')
                const location = new URL(window.location.href)
                const params = new URLSearchParams(window.location.search)
                const type = params.get('type')
                const url = type
                    ? `${location.origin}${location.pathname}?type=${data.slug}&_page=${page}/`
                    : `${location.origin}${location.pathname}?_page=${page}/`

                $(button).attr('href', url)
            })

            $prevBtn.prop('disabled', parseInt(data.page) === 1)
            $nextBtn.prop('disabled', parseInt(data.page) === parseInt($pagination.data('pages')))

            onClickChangePages($changePagesButtons)
        }
    }

    const filterPosts = (data = {}) => {
        $.ajax({
            type: 'post',
            url: window.ajax_url,
            data: {
                data,
                action: 'get_paginated_posts',
            },
            success: (response) => {
                $('.post-results').empty()

                if (response) {
                    $('.post-results').append(response)
                    setConfigPaginationButtons(data)
                    shareModal()
                }
            },
            error: () => alert('Unable to fetch new posts'),
        })
    }

    const getData = () => {
        const postType = $paginationContainer.data('post-type') ?? ''
        const postsPerPage = $paginationContainer.data('posts-per-page') ?? defaultPostsPerPage

        return {
            page: 1,
            postType,
            postsPerPage,
        }
    }

    const onClickChangePages = ($changePagesButtons = []) => {
        if ($changePagesButtons.length) {
            $changePagesButtons.each(function () {
                const page = this.dataset.pageNumber ?? 1

                $(this).on('click', () => {
                    const data = getData()
                    const location = new URL(window.location.href)
                    const url = `${location.origin}${location.pathname}?_page=${page}/`
                    data.page = page

                    if (data) {
                        filterPosts(data)
                    }

                    window.history.replaceState(null, '', url)
                })
            })
        }
    }

    const loadSearch = () => {
        const data = getData()
        const params = new URLSearchParams(window.location.search)
        const page = params.get('_page')?.split('/')[0] ?? 1
        data.page = page

        if (data) {
            filterPosts(data)
        }
    }

    const init = () => {
        if ($paginationContainer.length) {
            loadSearch()
        }
    }

    init() // Init all listeners
})
