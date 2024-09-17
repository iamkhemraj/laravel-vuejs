import { ref } from 'vue';
import axios from 'axios';

export default function useCustomerInfo() {
  const url = "http://127.0.0.1:8000/api/all-user";
  const customerData = ref([]);
  const successMessage = ref(null);
  const error = ref(null);

  // Get All Customer Data
  const getAllCustomer = async () => {
    customerData.value = [];
    successMessage.value = null;
    error.value = null;
    try {
      const response = await axios.get(url);
      customerData.value = response.data.data || []; 
      successMessage.value = response.data.message || null;
    } catch (err) {
      // console.error(err);
      error.value = err.message || 'An error occurred while fetching data'; 
    }
  };

  // Return reactive references and methods
  return {
    customerData,
    successMessage,
    error,
    getAllCustomer
  };
}
