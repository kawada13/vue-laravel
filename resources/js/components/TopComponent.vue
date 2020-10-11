<template>
  <div class="containner">
    <div class="row mt-3">
      <div class="col-sm-2">
        <side-bar></side-bar>
      </div>
      <div class="col-sm-10">
        <task-list></task-list>
      </div>
    </div>
  </div>
</template>

<script>
import SideBar from './SideBarComponent.vue'
import TaskList from './TaskListComponent.vue'

export default {
  components: {
    'side-bar': SideBar,
    'task-list': TaskList
  }
};
</script>