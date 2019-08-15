import Vue from 'vue'
import VueRouter from 'vue-router'

// ページコンポーネントのインポート
import PhotoList from './pages/PhotoList.vue'
import Login from './pages/Login.vue'
import SystemError from './pages/errors/System.vue'

import store from './store'

// VueRouterプラグインを使用する
// これによって<RouterView />コンポーネントなどを使うことができる
Vue.use(VueRouter)

// パスとコンポーネントのマッピング
const routes = [
    {
        path: '/',
        component: PhotoList   
    },
    {
        path: '/login',
        component: Login,
        beforeEnter(to, from, next){
            if(store.getters['auth/check']){
                next('/')
            }else{
                next()
            }
        }   
    },
    {
        path: '/500',
        component: SystemError,   
    },

]

// VueRouterインスタンスの生成
const router = new VueRouter({
    mode: 'history',    //URL中の#(ハッシュ)を消す
    routes
})

// VueRouterインスタンスをエクスポートする
// app.jsでインポートするため
export default router
