<template>
  <div :class="defineCor">
      <div class="panel-heading">{{ titulo }}</div>

      <div class="panel-body">
        <slot></slot>
      </div>
  </div>
</template>

<script>
export default {
  name: 'Painel',
  props: ['titulo', 'cor'],
  computed: {
    defineCor: function(){
      return "panel " + (this.cor || "panel-default");
    }
  }
}
</script>

<style>
.blue {
  border-color: #0d4a96;
}

.blue > .panel-heading {
  color: #f7f7f7;
  background-color: #0d4a96;
  border-color: #0d4a96;
}

.orange {
  border-color: #e85e0d;
}

.orange > .panel-heading {
  color: #f7f7f7;
  background-color: #e85e0d;
  border-color: #e85e0d;
}

.yellow {
  border-color: #f5fb00;
}

.yellow > .panel-heading {
  color: #000000;
  background-color: #f5fb00;
  border-color: #f5fb00;
}
</style>
