<template>
  <section id="locations">
    <h2>Places to Visit</h2>
    <div v-for="location in locations" :key="location.id">
        <LocationBanner :location="location" />
    </div>
  </section>
</template>
<script>
import LocationBanner from "@/components/LocationBanner";
export default {
  name: 'LocationList',
  components : {
    LocationBanner
  },
  data () {
    return {
      location: {},
      locations: [
        {
          ID: 1,
          image_name: "@/assets/images/Toronto.jpg",
          destination: "Toronto",
          description: "Toronto is Canada's largest city and a world leader in such areas as business, finance,\r\ntechnology, entertainment and culture. Its large population of immigrants from all over\r\nthe globe has also made Toronto one of the most multicultural cities in the world.",
          activity1 : "CN Tower",
          activity2: "Blue Jays Game",
          activity3: "Brewery Tour",
          icon1: "fas fa-building",
          icon2: "fas fa-baseball-ball",
          icon3: "fas fa-beer",
          link1: "https://www.cntower.ca/en-ca/home.html",
          link2: "https://www.mlb.com/bluejays",
          link3: "https://steamwhistle.ca/"
        },
        {
          ID: 2,
          image_name: "@/assets/images/Algonquin.jpg",
          destination: "Algonquin",
          description: "The oldest provincial park in Ontario and the first provincial park in Canada, Algonquin Provincial Park (established 27 May 1893, 7723 km2) is located 250 km north of Toronto. The park is famous for its wildlife, which includes a large population of moose.",
          activity1: "Hiking",
          activity2: "Camping",
          activity3: "Site seeing",
          icon1: "fas fa-hiking",
          icon2: "fas fa-campground",
          icon3: "fas fa-binoculars",
          link1: "http://www.algonquinpark.on.ca/visit/camping/eastern-pines-backpacking-trail.php",
          link2: "http://www.algonquinpark.on.ca/visit/camping/",
          link3: "http://www.algonquinpark.on.ca/visit/recreational_activites/wildlife-watching-in-algonquin-park.php"
        },
        { 
          ID: 3,
          image_name: "@/assets/images/Niagara.jpg",
          destination: "Niagara",
          description: "Niagara Falls is to waterfalls as the Great Wall of China is to walls, which is to say, it&#39;s not your average waterfall. Niagara Falls is really the collective name for three falls that straddle the United States/Canada border, as well as the names of the New York and Ontario cities that share the border.",
          activity1: "Niagara Fall",
          activity2: "Fallsview Casino",
          activity3: "Ripleys Museum",
          icon1: "fas fa-water",
          icon2: "fas fa-dollar-sign",
          icon3: "fas fa-hotel",
          link1: "https://www.niagarafallstourism.com/",
          link2: "https://www.fallsviewcasinoresort.com/",
          link3: "https://www.ripleys.com/niagarafalls/"
        },
        { 
          ID: 4,
          image_name: "@/assets/images/Muskoka.jpg",
          destination: "Muskoka",
          description: "Muskoka is an iconic area of Ontario&#39;s cottage country located approximately 200 km north of Toronto. A destination for seasonal residents and tourists who have been drawn by its natural beauty since the late 1800s, the district has equally been home to generations of permanent residents.",
          activity1: "Camping",
          activity2: "Fishing",
          activity3: "Hiking",
          icon1: "fas fa-campground",
          icon2: "fas fa-fish",
          icon3: "fas fa-hiking",
          link1: "https://www.discovermuskoka.ca/where-to-stay/camping-rv-parks/",
          link2: "https://www.discovermuskoka.ca/things-to-do/airplane-helicopter-tours/",
          link3: "https://www.discovermuskoka.ca/things-to-do/hiking-trails/"
        },
        {
          ID: 5,
          image_name: "@/assets/images/Tobermory.jpg",
          destination: "Tobermory",
          description: "Tobermory is a small community located at the northern tip of the Bruce Peninsula in the municipality of Northern Bruce Peninsula. It is 300 kilometres (190 miles) northwest of Toronto.",
          activity1: "Hiking",
          activity2: "Sight Seeing",
          activity3: "Brewery Tour",
          icon1: "fas fa-hiking",
          icon2: "fas fa-binoculars",
          icon3: "fas fa-beer",
          link1: "https://tobermory.com/do-see/outdoors-adventures/hiking-trails",
          link2: "https://tobermory.com/do-see/sightseeing",
          link3: "https://www.tobermorybrewingco.ca/"
        },
        {
          ID: 6,
          image_name: "@/assets/images/Ottawa.jpg",
          destination: "Ottawa",
          description: "Ottawa, in the province of Ontario, is the capital of Canada. This picturesque and safe\r\ncity is the fourth largest city in the country, with a population of 883,391 as of the 2011\r\nCanadian census. It&#39;s on the eastern border of Ontario, just across the Ottawa River\r\nfrom Gatineau, Quebec.",
          activity1: "Parliament Hill",
          activity2: "Rideau Canal",
          activity3: "CFL Game",
          icon1: "fas fa-building",
          icon2: "fas fa-water",
          icon3: "fas fa-football-ball",
          link1: "https://visit.parl.ca/sites/Visit/default/en_CA",
          link2: "https://ncc-ccn.gc.ca/places/rideau-canal-skateway",
          link3: "https://www.ottawaredblacks.com/"
        }
      ]
    }
  }
}
</script>

