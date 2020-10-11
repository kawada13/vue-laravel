<template>
  <div class="container mt-3">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <form @submit.prevent="submit">
          <div class="form-group row">
            <label for="title" class="col-sm-3 col-form-label">タイトル</label>
            <input type="text" class="col-sm-9 form-control" id="title" v-model="task.title">
          </div>
          <div class="form-group row">
            <label for="content" class="col-sm-3 col-form-label">内容</label>
            <input type="text" class="col-sm-9 form-control" id="content" v-model="task.content">
          </div>
          <button type="submit" class="btn btn-primary">追加</button>
        </form>
      </div>
    </div>
  </div>
</template>
 
 <script>
export default {
  data: function () {
    return {
      task: {},
    };
  },
  methods: {
    submit() {
      // console.log(this.task)
      axios.post("/api/tasks", this.task).then((res) => {
        console.log(res.data);
        this.$router.push({ name: "task.list" });
      });
    },
  },
};
</script>