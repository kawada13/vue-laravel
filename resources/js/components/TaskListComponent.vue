<template>
  <div class="container mt-3">
    <table class="table">
      <thead class="grey lighten-2">
        <tr>
          <th scope="col">#</th>
          <th scope="col">タイトル</th>
          <th scope="col">詳細</th>
          <th scope="col">編集</th>
          <th scope="col">削除</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="task in tasks" :key="task.id">
          <th scope="row">{{ task.id }}</th>
          <td>{{ task.title }}</td>
          <td>
            <router-link
              v-bind:to="{ name: 'task.show', params: { taskId: task.id } }"
            >
              <button class="btn btn-primary">Show</button>
            </router-link>
          </td>
          <td>
            <router-link
              v-bind:to="{ name: 'task.edit', params: { taskId: task.id } }"
            >
              <button class="btn btn-success">Edit</button>
            </router-link>
          </td>
          <td>
            <button class="btn btn-danger" v-on:click="deleteTask(task.id)">
              Delete
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      tasks: [],
    };
  },
  methods: {
    getTasks() {
      axios.get("/api/tasks").then((res) => {
        this.tasks = res.data;
      });
    },
    deleteTask(id) {
      axios.delete("/api/tasks/" + id).then((res) => {
        this.getTasks();
      });
    },
  },
  mounted() {
    this.getTasks();
  },
};
</script>