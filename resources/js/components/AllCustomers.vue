<script setup>
  import { onMounted } from 'vue';
  import useCustomerInfo from '../composables/getAllCustomers';

  const { customerData, error, getAllCustomer } = useCustomerInfo();

  onMounted(() => {
    getAllCustomer(); // Fetch data when component is mounted
  });

</script>

<template>
  <div class="container">
    <div class="table-responsive">
      <div class="table-wrapper">
        <div class="table-title">
          <div class="row">
            <div class="col-xs-5">
              <h2><b>Banking Management</b></h2>
            </div>
            <div class="col-xs-7">
              <a href="#" class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i> <span>Add New User</span></a>
              <a href="#" class="btn btn-primary"><i class="fa-solid fa-file"></i> <span>Export to Excel</span></a>
            </div>
          </div>
        </div>

        <!-- Display error message if present -->
        <div v-if="error" class="alert alert-danger">
          Oops! Error encountered: {{ error }}
        </div>

        <!-- Display customer data if no error -->
        <table class="table table-striped table-hover" v-else>
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone number</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(customer, index) in customerData" :key="customer.id">
              <td>{{ index + 1 }}</td>
              <td>{{ customer.name }}</td>
              <td>{{ customer.email }}</td>
              <td>{{ customer.phone }}</td>
              <td>
                <span :class="['status', customer.status === 'inactive' ? 'text-danger' : 'text-success']">&bull;</span> 
                {{ customer.status }}
              </td>
              <td>
                <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="fa-solid fa-pen"></i></a>
                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="fa-solid fa-trash"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>
