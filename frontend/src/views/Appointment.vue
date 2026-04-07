<template>
    <div class="flex min-h-screen bg-gray-100">
    <!-- Sidebar -->
    <Sidebar/>

    <div v-if="appointments.length > 0">
        <div v-for="res in appointments" :key="res.id" class="card">
            <p>{{ res.date }} - {{ res.time }}</p>
            <p>{{ res.status }}</p>
            <p>+212{{ res.client_phone }}</p>
            <p>Status: {{ res.statut }}</p>
        </div>
    </div>
    <div v-else>
        <p> not appointment</p>
    </div>
    </div>
</template>

<script>
import api from '@/services/api';
import Sidebar from '@/components/dashboard/Sidebar.vue'

export default {
    data() {
        return {
            appointments: []
        }
    },

    methods: {
        async fetchAppointment() {
            try {
                const res = await api.get('/appointment')
                this.appointments = res.data.data
                console.log(res)
            } catch (err) {
                // alert(err);
                console.log(err)
            }
        }
    },

    mounted() {
        this.fetchAppointment();
    },

    components: {
        Sidebar   
    }

}

</script>

<style>
.container {
    max-width: 600px;
    margin: auto;
}

form {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-bottom: 20px;
}

.card {
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 10px;
}
</style>