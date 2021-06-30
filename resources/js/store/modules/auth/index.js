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
        setUser(state, payload) {
            state.user = payload;
        },
        setErrors(state, payload) {
            state.errors = payload;
        }
    },
    actions: {
        setUser({commit}, payload) {
            commit("setUser", payload)
        },
        setErrors({commit}, payload) {
            commit("setErrors", payload);
        },
        doLogin({commit, dispatch}, payload) {
            dispatch("preloader/setLoading", true, { root: true }).then(() => {
                window.axios.post("/api/login", payload)
                    .then(response => {
                        console.log(response.data);
                    })
                    .catch(error => {
                        dispatch("setErrors", error);
                    }).then(() => {
                        dispatch("preloader/setLoading", false, { root: true });
                    });
            })
        }
    }
};