<template>
  <div class="col-span-5 space-y-4">
    <h2 class="text-center font-bold">Match Results</h2>
    <h3>{{ weekNumber }} week match result</h3>
    <div class="grid grid-cols-3 gap-4" v-for="match in matches" :key="match.id">
      <div class="col-span-1">
        {{ match.match_details[0].team.name }}
      </div>
      <div class="col-span-1">
        {{ match.score }}
      </div>
      <div class="col-span-1">
        {{ match.match_details[1].team.name }}
      </div>
    </div>
  </div>
</template>

<script>
    export default {
        props: ['matches', 'weekNumber'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
