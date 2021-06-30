import { createStore } from "vuex";
import auth from "./modules/auth";
import preloader from "./modules/preloader";

export default createStore({
    modules: {
        preloader,
        auth
    },
    state() {
        return {
            
        }
    },
    getters: {
        
    },
    mutations: {
        
    },
    actions: {
        
    }
});
