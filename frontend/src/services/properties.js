import { http } from './config.js';

export default {
    index: () => { return http.get(`/properties`) },
    store: (data) => { return http.post(`/properties`, data) },
    show: (id) => { return http.get(`/properties/${id}`) }
}