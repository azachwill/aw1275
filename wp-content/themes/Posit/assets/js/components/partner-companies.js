import PartnerCompanies from '../class/PartnerCompanies'

const init = () => {
    const partnerCompaniesContainers = document.querySelectorAll('.partner-companies')

    partnerCompaniesContainers.forEach((container) => {
        const partnerCompanies = new PartnerCompanies(container)
        partnerCompanies.init()
    })
}

export default init
