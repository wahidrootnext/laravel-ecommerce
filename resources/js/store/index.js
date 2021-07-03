import { createStore } from "vuex";
import auth from "./modules/auth";
import preloader from "./modules/preloader";

const store = createStore({
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

export default store;
