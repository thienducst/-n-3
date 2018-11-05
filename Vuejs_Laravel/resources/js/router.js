import VueRouter from 'vue-router';

// ---------- Component -------------------
import sinhvien from './components/sinhvien'
import them_sinhvien from './components/them_sinhvien'
// ----------------------------------------


const routes = [
    {
        path: '/sinh-vien',
        component: sinhvien
    },
    {
        path: '/sinhvien/them' ,
        component: them_sinhvien 
    },
]; 
// khai báo router
const router = new VueRouter({
    routes
});

export default router; 