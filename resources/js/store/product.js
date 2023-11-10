import axios from 'axios';

const state = {
    products: [],
};

const getters = {
    allProducts: state => state.products,
};

const actions = {
    async fetchProducts({ commit }) {
        const response = await axios.get('/api/products');
        commit('setProducts', response.data);
    },

    async fetchFilteredProducts({ commit }, filters) {
        const response = await axios.get('/api/products', { params: filters });
        commit('setProducts', response.data);
    },

    async addProduct({ commit }, product) {
        const response = await axios.post('/api/products', product);
        commit('newProduct', response.data);
    },

    async updateProduct({ commit }, updatedProduct) {
        const response = await axios.put(`/api/products/${updatedProduct.id}`, updatedProduct);
        commit('updateProduct', response.data);
    },

    async deleteProduct({ commit }, id) {
        await axios.delete(`/api/products/${id}`);
        commit('removeProduct', id);
    },
};

const mutations = {
    setProducts: (state, products) => (state.products = products),
    newProduct: (state, product) => state.products.unshift(product),
    updateProduct: (state, updatedProduct) => {
        const index = state.products.findIndex(p => p.id === updatedProduct.id);
        if (index !== -1) {
            state.products.splice(index, 1, updatedProduct);
        }
    },
    removeProduct: (state, id) => {
        state.products = state.products.filter(product => product.id !== id);
    },
};

export default {
    state,
    getters,
    actions,
    mutations,
};
