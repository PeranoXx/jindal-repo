import apiClient from '../plugins/axios'

export default {
  getHomePageContent() {
    return apiClient.get('api/home-page')
  },
}