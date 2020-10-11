<template>
  <div>
    <ul class="nav flex-column blue lighten-5 py-4 font-weight-bold">
      <li class="nav-item text-center">
        <router-link :to="{ name: 'task.create' }">
          <a class="nav-link" href="#">todoを追加する</a>
        </router-link>
      </li>
      <li class="nav-item text-center">
        <router-link v-bind:to="{ name: 'task.list' }">
          <a class="nav-link" href="#!">todo一覧</a>
        </router-link>
      </li>
    </ul>
  </div>
</template>

<script>
export default {};
</script>