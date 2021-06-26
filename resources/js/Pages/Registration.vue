<template>
    <div class="container py-5">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header">
                        Registration
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="registration">
                            <div class="mb-3">
                                <label for="first_name" class="form-label fw-bold">First Name</label>
                                <input type="text" class="form-control" id="first_name" v-model="form.first_name">
                            </div>
                            <div class="mb-3">
                                <label for="last_name" class="form-label fw-bold">Last Name</label>
                                <input type="text" class="form-control" id="last_name" v-model="form.last_name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">Email</label>
                                <input type="text" class="form-control" id="email" v-model="form.email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label fw-bold">Password</label>
                                <input type="password" class="form-control" id="password" v-model="form.password">
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label fw-bold">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation" v-model="form.password_confirmation">
                            </div>
                            <div class="mb-3">
                                <label for="mobile" class="form-label fw-bold">Mobile</label>
                                <input type="text" class="form-control" id="mobile" v-model="form.mobile">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Submit</button>
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
        name: "Registration",
        data() {
            return {
                form: {
                    first_name: null,
                    last_name: null,
                    email: null,
                    password: null,
                    password_confirmation: null,
                    mobile: null
                }
            }
        },
        methods: {
            registration() {
                console.log(this.form)
            }
        }
    }
</script>