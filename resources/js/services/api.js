import apiClient from '../plugins/axios'

export default {
  getHomePageContent() {
    console.log(import.meta.env.VITE_API_BASE_URL);
      console.log(111);
      
    return apiClient.get('api/home-page')
  },

  getCategories(){
    return apiClient.get('api/categories')
  },

  getProduct(slug){
    return apiClient.get(`api/product/${slug}`)
  },

  getAboutUs(){
    return apiClient.get('api/about-us')
  },

  contactUs(payload){
    return apiClient.post('api/contact', payload)
  }
}