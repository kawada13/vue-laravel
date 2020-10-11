<template>
  <nav class="navbar navbar-expand-lg navbar-dark primary-color">
    <!-- Navbar brand -->
    <router-link v-bind:to="{ name: 'top' }">
      <a class="navbar-brand" href="#">Vue Laravel todo list</a>
    </router-link>

    <!-- Collapse button -->
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#basicExampleNav"
      aria-controls="basicExampleNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
      <!-- Links -->
      <form class="form-inline ml-auto">
        <div class="md-form my-0">
          <input
            class="form-control mr-sm-2"
            type="text"
            placeholder="検索する"
            aria-label="Search"
          />
        </div>
      </form>
    </div>
    <!-- Collapsible content -->
  </nav>
  <!--/.Navbar-->
</template>

<script>
export default {};
</script>