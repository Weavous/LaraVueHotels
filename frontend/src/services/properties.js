import { http } from './config.js';

export default {
    all: () => { return http.get('/properties') }
}