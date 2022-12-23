import {HTTP} from '../../core/plugins/http'
import CONSTANTS from '../../core/utils/constants';


export const listProduct = ({commit},opt) => {
    return new Promise((resolve, reject) => {
        HTTP.post('/api/product/list',opt).then(response => {
            return resolve(response.data);
        }).catch(error => {
            return reject(error);
        })
    });
};
export const deleteId = ({commit},opt) => {
    console.log(opt);
    return new Promise((resolve, reject) => {
        HTTP.get('/api/product/delete/'+ opt.id_item).then(response => {
            return resolve(response.data);
        }).catch(error => {
            return reject(error);
        })
    });
};

export const editId = ({commit},opt) => {
    return new Promise((resolve, reject) => {
        HTTP.get('/api/product/edit/'+ opt.id).then(response => {
            return resolve(response.data);
        }).catch(error => {
            return reject(error);
        })
    });
};

export const saveProduct = ({commit},opt) => {
    return new Promise((resolve, reject) => {
        HTTP.post('/api/product/create',opt).then(response => {
            return resolve(response.data);
        }).catch(error => {
            return reject(error);
        })
    });
};
