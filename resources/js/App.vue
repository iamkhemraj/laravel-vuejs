<template>
  <div class="container">
    <div class="table-responsive">
      <div class="table-wrapper">
        <div class="table-title">
          <div class="row">
            <div class="col-xs-5">
              <h2>User <b>Management</b></h2>
            </div>
            <div class="col-xs-7">
              <a href="#" class="btn btn-primary"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
              <a href="#" class="btn btn-primary"><i class="material-icons">&#xE24D;</i> <span>Export to Excel</span></a>
            </div>
          </div>
        </div>
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Password</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="ans in answer.data" :key="ans.id">
              <td>{{ ans.id }}</td>
              <td>{{ ans.name }}</td>
              <td>{{ ans.email }}</td>
              <td>{{ ans.password }}</td>
              <td><span class="status text-success">&bull;</span> Active</td>
              <td>
                <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                <FontAwesomeIcon :icon="['fas', 'house']" />
                <FontAwesomeIcon :icon="['fas', 'mouse']" />
                <FontAwesomeIcon :icon="['fas', 'cheese']" />
                <FontAwesomeIcon :icon="['fas', 'cat']" />
                <FontAwesomeIcon :icon="['fas', 'dog']" />
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<style>
body {
  color: #566787;
  background: #f5f5f5;
  font-family: 'Varela Round', sans-serif;
  font-size: 13px;
}

.table-responsive {
  margin: 30px 0;
}

.table-wrapper {
  min-width: 1000px;
  background: #fff;
  padding: 20px 25px;
  border-radius: 3px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
}

.table-title {
  padding-bottom: 15px;
  background: #299be4;
  color: #fff;
  padding: 16px 30px;
  margin: -20px -25px 10px;
  border-radius: 3px 3px 0 0;
}

.table-title h2 {
  margin: 5px 0 0;
  font-size: 24px;
}

.table-title .btn {
  color: #566787;
  float: right;
  font-size: 13px;
  background: #fff;
  min-width: 50px;
  border-radius: 2px;
  outline: none !important;
  margin-left: 10px;
}

.table-title .btn:hover,
.table-title .btn:focus {
  color: #566787;
  background: #f2f2f2;
}

.table-title .btn i {
  float: left;
  font-size: 21px;
  margin-right: 5px;
}

.table-title .btn span {
  float: left;
  margin-top: 2px;
}

table.table tr th,
table.table tr td {
  border-color: #e9e9e9;
  padding: 12px 15px;
  vertical-align: middle;
}

table.table tr th:first-child {
  width: 60px;
}

table.table tr th:last-child {
  width: 100px;
}

table.table-striped tbody tr:nth-of-type(odd) {
  background-color: #fcfcfc;
}

table.table-striped.table-hover tbody tr:hover {
  background: #f5f5f5;
}

table.table th i {
  font-size: 13px;
  margin: 0 5px;
  cursor: pointer;
}

table.table td:last-child i {
  opacity: 0.9;
  font-size: 22px;
  margin: 0 5px;
}

table.table td a {
  font-weight: bold;
  color: #566787;
  display: inline-block;
  text-decoration: none;
}

table.table td a:hover {
  color: #2196F3;
}

table.table td a.settings {
  color: #2196F3;
}

table.table td a.delete {
  color: #F44336;
}

table.table td i {
  font-size: 19px;
}

table.table .avatar {
  border-radius: 50%;
  vertical-align: middle;
  margin-right: 10px;
}

.status {
  font-size: 30px;
  margin: 2px 2px 0 0;
  display: inline-block;
  vertical-align: middle;
  line-height: 10px;
}

.text-success {
  color: #10c469;
}

.text-info {
  color: #62c9e8;
}

.text-warning {
  color: #FFC107;
}

.text-danger {
  color: #ff5b5b;
}
</style>

<script>
  import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
  import { library } from '@fortawesome/fontawesome-svg-core';
  import { faHouse, faMouse, faCheese, faCat, faDog } from '@fortawesome/free-solid-svg-icons';
  import Script from 'next/script';
import { scripts } from 'laravel-mix';

  library.add(faHouse, faMouse, faCheese, faCat, faDog);

  export default {
    name: "App",
    components: {
      FontAwesomeIcon,
    },
    data() {
      return {
        answer: {},
      };
    },
    methods: {
      async getAnswer() {
        const response = await axios.get("http://127.0.0.1:8000/api/all-user");
        this.answer = response.data;
      },
    },
    beforeMount() {
      this.getAnswer();
    },
  };
</script>