import api from "@/services/api";
import { authState } from "@/store";

export const initAuth = async () => {
    // const token = localStorage.getItem("token");

    // if (!token) {
    //     authState.isLoggedIn = false;
    //     authState.user = null;
    //     return;
    // }

    try {
        const res = await api.get("/user");

        authState.user = res.data.user;
        authState.isLoggedIn = true;

    } catch (e) {
        console.log(e.response);
        console.log("error");
        // localStorage.removeItem("token");
        // authState.isLoggedIn = false;
        // authState.user = null;
    }
};

export const login = async (Credential) => {
    authState.loading = true
    authState.error = null

    try{
        const res = await api.post('/login', Credential)
        console.log(res.data)

        // localStorage.setItem('token',res.data.token)
        authState.user = res.data.user
        authState.isLoggedIn = true

        return res.data
    }catch(err){
        authState.error = err.response?.data?.message || 'token fialed'
        return false
    }finally{
        authState.loading = false
    }
}

export const logout = async () =>{
    try{
        const res = await api.get('/logout')
        console.log(res)
    }catch(e){
        console.log(e)
    }

    // localStorage.removeItem('token')
    authState.user = null
    authState.isLoggedIn = false
}