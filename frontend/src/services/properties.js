import { http } from './config.js';

export default {
    index: () => { return http.get(`/properties`) },
    store: (data) => { return http.post(`/properties`, data) },
    show: (id) => { return http.get(`/properties/${id}`) },
    update: (id, data) => { return http.put(`/properties/${id}`, data) },
    delete: (id) => { return http.delete(`/properties/${id}`) },
    nearestproperties: (lat, lng) => { return http.get(`/nearestproperties/${lat}/${lng}`) }
}