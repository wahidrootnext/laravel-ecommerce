import router from '../../../router';

export default {
    namespaced: true,
    state() {
        return {
            user: null,
            errors: null
        }
    },
    getters: {
        getUser(state) {
            return state.user;
        },
        getErrors(state) {
            return state.errors;
        }
    },
    mutations: {
        setUser(state, user) {
            state.user = user;
        },
        setErrors(state, errors) {
            state.errors = errors;
        },
        logout(state) {
            state.user = null;
            state.errors = null;
            localStorage.removeItem("access_token");
            delete axios.defaults.headers.common['Authorization'];
            router.push({ name: 'login' });
        }
    },
    actions: {
        registration({ commit }, user) {
            axios.get('/sanctum/csrf-cookie').then(() => {
                window.axios.post("/api/registration", user)
                    .then(() => {
                        router.push({ name: 'login' });
                    })
                    .catch(errors => {
                        console.log(errors.response.data.errors)
                        commit("setErrors", errors.response.data.errors);
                    });
            });
        },
        login({ commit }, user) {
            return new Promise((resolve) => {
                axios.get('/sanctum/csrf-cookie').then(() => {
                    window.axios.post("/api/login", user)
                        .then(response => {
                            let token = response.data.access_token;
                            if (token) {                        
                                localStorage.setItem("access_token", token);
                                axios.defaults.headers.common['Authorization'] = "Bearer " + token;
                                router.push({ name: 'dashboard' });
                            }
                        })
                        .catch(errors => {
                            console.log(errors.response.data.errors)
                            commit("setErrors", errors.response.data.errors);
                        })
                        .then(() => {
                            resolve();
                        });
                });
            });
        },
        setUser({ commit }) {
            return new Promise((resolve) => {
                axios.get('/sanctum/csrf-cookie').then(() => {
                    window.axios.get("/api/me")
                        .then(response => {
                            commit("setUser", response.data);
                        })
                        .catch(errors => {
                            console.log(errors.response.data);
                            commit("setErrors", errors.response.data);
                            router.push({ name: 'login' });
                        })
                        .then(() => {
                            resolve();
                        });
                });
            });
        }
    }
};