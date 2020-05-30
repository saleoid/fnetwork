<template>
  <div class="col-span-7">
    <h2 class="text-center font-bold">League Table</h2>
    <table class="table-auto">
      <thead>
        <tr>
          <th class="px-4 py-2">Team</th>
          <th class="px-4 py-2">PTS</th>
          <th class="px-4 py-2">P</th>
          <th class="px-4 py-2">W</th>
          <th class="px-4 py-2">D</th>
          <th class="px-4 py-2">L</th>
          <th class="px-4 py-2">GD</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="team in teams" :key="team.id">
          <td class="border px-4 py-2">{{ team.name }}</td>
          <td class="border px-4 py-2">{{ team.points }}</td>
          <td class="border px-4 py-2">{{ team.matches_played }}</td>
          <td class="border px-4 py-2">{{ team.won }}</td>
          <td class="border px-4 py-2">{{ team.draw }}</td>
          <td class="border px-4 py-2">{{ team.lost }}</td>
          <td class="border px-4 py-2">{{ team.goal_difference }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
    export default {
        props: ['teams'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
