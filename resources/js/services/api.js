import apiClient from '../plugins/axios'

export default {
  getHomePageContent() {
    return apiClient.get('api/home-page')
  },

  getCategories(){
    return apiClient.get('api/categories')
  },

  getProduct(slug){
    return apiClient.get(`api/product/${slug}`)
  }
}