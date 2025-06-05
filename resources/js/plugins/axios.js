import axios from 'axios'

const apiClient = axios.create({
  baseURL: import.meta.env.VITE_API_BASE_URL, // uses VITE_ for Vite
  headers: {
    'Content-Type': 'application/json',
    // Authorization: `Bearer ${token}` can also be set here
  }
})

export default apiClient