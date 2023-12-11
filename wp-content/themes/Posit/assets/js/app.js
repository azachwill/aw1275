import '@lottiefiles/lottie-player'
import tabs from './components/tabs'
import slider from './components/slider'
import ourTeam from './components/our-team'
import extLinkIcon from './components/external-link-icon'
import countdown from './components/countdown'
import accordion from './components/accordion'
import navigation from './components/navigation'
import shareModal from './components/share-modal'
import framedPosts from './components/iframed-posts'
import titleHeading from './components/title-heading'
import partnerCompanies from './components/partner-companies'
import initFullScreenModals from './components/full-screen-modals'
import stackedCarousels from './components/stacked-carousels'
import multiselectDropdown from './components/multiselect-dropdown'
import hoverCardsAnimation from './components/hover-cards-animation'
import downloadContent from './components/download-content'
import copyToClipboard from './components/copy-to-clipboard'
import postsSlider from './components/posts-slider'
import tabsByClass from './components/tabs-by-class'
import partnerFormModal from './components/partner-form-modal'
import repeaterModalComponent from './components/repeater-modal-component'
import modal from './components/modal'
import searchOptions from './components/search-options'
import './components/search-block'
import select from './components/select'
import tooltip from './components/tooltip'
import pricingCalculator from './components/pricing-calculator'
import pagination from './components/pagination'
import timeline from './components/timeline'
import video from './components/video'
import './components/post-pagination'
import externalLinks from './components/external-links'
import tableOfContent from './components/table-of-content'
import postTabs from './components/post-tabs'
import alertBanner from './components/alert-banner'
import './components/feature-tabs'
import './components/technical-tabs'

function main() {
    select()
    tabs()
    modal()
    slider()
    ourTeam()
    countdown()
    accordion()
    shareModal()
    navigation()
    tabsByClass()
    framedPosts()
    titleHeading()
    partnerFormModal()
    repeaterModalComponent()
    partnerCompanies()
    stackedCarousels()
    pricingCalculator()
    multiselectDropdown()
    hoverCardsAnimation()
    initFullScreenModals()
    downloadContent()
    copyToClipboard()
    postsSlider()
    tooltip()
    timeline()
    video()
    extLinkIcon()
    pagination()
    tableOfContent()
    externalLinks()
    postTabs()
    searchOptions()
    alertBanner()
    featureTabs()
    technicalTabs()
}

window.addEventListener('DOMContentLoaded', () => {
    main()
})
