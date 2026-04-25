import { authState } from "@/store";
import Echo from "laravel-echo"
import Pusher from "pusher-js"

window.Pusher = Pusher;

const echo = new Echo({
    // broadcaster: "pusher",
    // key: import.meta.env.VITE_PUSHER_APP_KEY,
    // cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    // forceTLS: false,

    // authEndpoint: "http://localhost/api/broadcasting/auth",

    broadcaster: 'reverb',
    key: import.meta.env.VITE_REVERB_APP_KEY,
    wsHost: import.meta.env.VITE_REVERB_HOST,
    wsPort: import.meta.env.VITE_REVERB_PORT,

    forceTLS: false, 
    encrypted: false,  
    disableStats: true,
    authEndpoint: `${import.meta.env.VITE_API_URL}/broadcasting/auth`,   
    withCredentials: true,

})

export default echo;