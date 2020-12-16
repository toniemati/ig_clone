<template>
    <div>
        <button
            @click="followUser"
            class="btn btn-primary ml-4"
            v-text="buttonText"
        ></button>
    </div>
</template>

<script>
    export default {
        name: "FollowButton",

        props: ["userId", "follows"],

        computed: {
            buttonText: function() {
                return this.status ? "Unfollow" : "Follow";
            }
        },

        data() {
            return {
                status: this.follows
            };
        },

        methods: {
            followUser: function() {
                axios
                    .post("/follow/" + this.userId)
                    .then(res => {
                        this.status = !this.status;
                        console.log(res.data);
                    })
                    .catch(error => {
                        if (error.response.status == 401) {
                            window.location = "/login";
                        }
                    });
            }
        }
    };
</script>

<style scoped>
</style>
