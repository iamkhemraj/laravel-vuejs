<template>
  <div class="register-form w-50 m-auto p-5 border mt-5">
    <div class="form-header">
      <h2>Bank Account Registration</h2>
    </div>
    <form @submit.prevent="submitForm">
      <!-- Personal Information -->
      <div class="row">
        <div class="col">
          <label for="name">Full Name:</label>
          <input v-model="name" type="text" id="name" class="form-control" required>
        </div>
        <div class="col">
          <label for="email">Email:</label>
          <input v-model="email" type="email" id="email" class="form-control" required>
        </div>
      </div>
      
      <div class="row">
        <div class="col">
          <label for="password">Password:</label>
          <input v-model="password" type="password" id="password" class="form-control" required>
        </div>
        <div class="col">
          <label for="dob">Date of Birth:</label>
          <input v-model="dob" type="date" id="dob" class="form-control" required>
        </div>
      </div>

      <div class="form-group">
        <label for="gender">Gender:</label>
        <select v-model="gender" id="gender" class="form-control" required>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="others">Others</option>
        </select>
      </div>

      <!-- Bank Information -->
      <div class="row mt-3">
        <div class="col">
          <label for="bankName">Name of Bank:</label>
          <input v-model="backName" type="text" class="form-control" id="bankName">
        </div>
        <div class="col">
          <label for="address">Address:</label>
          <input v-model="address" class="form-control" placeholder="Street address" id="address">
        </div>
      </div>

      <div class="row">
        <div class="col">
          <label for="city">City:</label>
          <input v-model="city" type="text" class="form-control" id="city">
        </div>
        <div class="col">
          <label for="zipCode">Postal / Zip Code:</label>
          <input v-model="zipCode" type="text" class="form-control" id="zipCode">
        </div>
      </div>

      <div class="row mt-3">
        <div class="col">
          <label for="accountNumber">Bank Account Number:</label>
          <input v-model="accountNumber" type="text" id="accountNumber" class="form-control" placeholder="Account Number" required>
        </div>
        <div class="col">
          <label for="phoneNumber">Phone Number:</label>
          <input v-model="phoneNumber" type="text" id="phoneNumber" class="form-control" placeholder="Phone Number" required>
        </div>
        <div class="col">
          <label for="aadharCard">Aadhar Card:</label>
          <input v-model="aadharCard" type="text" id="aadharCard" class="form-control" placeholder="Aadhar Card" required>
        </div>
      </div>

      <button type="submit" class="register-btn w-100 mt-3">Register</button>
    </form>

    <div v-if="error" class="alert alert-danger mt-3">
      {{ error }}
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';

// Form data
const backName = ref('');
const address = ref('');
const city = ref('');
const zipCode = ref('');
const name = ref('');
const email = ref('');
const password = ref('');
const dob = ref('');
const gender = ref('male'); // Default value
const accountNumber = ref('');
const phoneNumber = ref('');
const aadharCard = ref('');
const error = ref(null);

const submitForm = async () => {
  try {
    const response = await axios.post('/api/register', {
      backName: backName.value,
      address: address.value,
      city: city.value,
      zipCode: zipCode.value,
      name: name.value,
      email: email.value,
      password: password.value,
      dob: dob.value,
      gender: gender.value,
      accountNumber: accountNumber.value,
      phoneNumber: phoneNumber.value,
      aadharCard: aadharCard.value
    });

    console.log(response.data); // Handle success, like redirect to dashboard
  } catch (err) {
    error.value = err.response.data.message || 'An error occurred.';
  }
};
</script>

<style scoped>
/* Add your custom styles here */
</style>
