<template>
    <div class="container py-5">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="handleLogin">
                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">Email</label>
                                <input type="text" class="form-control" id="email" v-model="form.email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label fw-bold">Password</label>
                                <input type="password" class="form-control" id="password" v-model="form.password">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                form: {
                    email: 'harber.mathew@example.net',
                    password: 'password',
                }
            }
        },
        methods: {
            handleLogin() {
                this.$store.dispatch("preloader/setLoading", true);
                this.$store.dispatch("auth/login", this.form).then(() => {
                    this.$store.dispatch("preloader/setLoading", false);
                });
            }
        }
    }
</script>
