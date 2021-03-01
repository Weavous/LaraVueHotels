import { http } from './config.js';

export default {
    index: () => { return http.get('/addresses') },
    store: (data) => { return http.post('/addresses', data) }
}