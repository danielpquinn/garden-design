
export default class GardensController {

  constructor(gardens) {
    this.gardens = gardens

    // Add a "next" link to each garden

    this.gardens.forEach((garden, i) => {
      garden.next = this.gardens[i + 1]
    })
  }
}

GardensController.$inject = [ 'gardens' ]