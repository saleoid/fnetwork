<template>
  <div class="grid grid-cols-3 gap-4">
    <div class="col-span-2 border-solid border-2 border-gray-600 px-2">
      <div class="grid grid-cols-12 gap-4">
        <league-table :teams="teamsData"></league-table>
        <match-results :matches="matchesData" :weekNumber="suffix_of(weekNumber)"></match-results>
        <div class="col-span-12">
          <div class="grid grid-cols-2 gap-4">
            <div class="col-span-1">
              <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" disabled>
                Play All
              </button>
            </div>
            <div class="col-span-1 text-right">
              <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" v-on:click="nextWeek" v-show="weekNumber<5">
                Next Week
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-span-1 border-solid border-2 border-gray-600 px-2" v-if="weekNumber>3">
      <h2 class="text-center font-bold">{{ suffix_of(weekNumber) }} weeks predictions of championship</h2>
      <div v-for="tprob in teamProb" :key="tprob.name" class="grid grid-cols-2 gap-2">
        <div class="col-span-1 px-2">
          {{ tprob.name }}
        </div>
        <div class="col-span-1 px-2 text-right">
          %{{ Math.round(tprob.prob) }}
        </div>
      </div>
    </div>
  </div>
</template>

<script>
    import LeagueTable from './LeagueTable.vue'
    import MatchResults from './MatchResults.vue'
    import moment from 'moment';

    const axios = require('axios')
    export default {
      components: {
        'league-table': LeagueTable,
        'match-results': MatchResults
      },
      props: ['teams', 'matches'],
      data: function () {
        return {
          teamsData: [],
          matchesData: [],
          weekStart: '2020-05-02',
          weekNumber: 1,
          teamProb: [],
        }
      },
      mounted() {
        this.teamsData = this.teams;
        this.matchesData = this.matches;
      },
      methods: {
        nextWeek: function() {
          let currentWeek = moment(this.weekStart)
          let nextWeek = moment(this.weekStart).add(7, 'days')
          axios.get('/stats/' + nextWeek.unix())
          .then((response) => {
            this.weekStart = nextWeek
            this.weekNumber += 1
            this.teamsData = response.data.teams
            this.matchesData = response.data.matches
            let totalPoints = 0
            let teamProb = []
            response.data.teams.forEach((data) => {
              totalPoints += data.points
            })
            response.data.teams.forEach((data) => {
              teamProb.push({name: data.name, prob: (data.points / totalPoints * 100)})
            })
            this.teamProb = teamProb
          })
          .catch((error) => {
            console.log(error);
          })

        },
        suffix_of: function(i) {
          var j = i % 10,
              k = i % 100;
          if (j == 1 && k != 11) {
              return i + "st";
          }
          if (j == 2 && k != 12) {
              return i + "nd";
          }
          if (j == 3 && k != 13) {
              return i + "rd";
          }
          return i + "th";
      }
      }

    }
</script>
