
export default class GardenController {

  constructor() {
    this.title = 'Modern Natural';
    this.captionOpen = true;
    this.nextSlug = 'garden';

    this.images = [{
      thumb: 'http://placehold.it/400x400',
      full: 'http://placehold.it/1600x1000',
      title: 'Title here',
      description: 'Description here'
    }, {
      thumb: 'http://placehold.it/400x400/dddddd/ffffff',
      full: 'http://placehold.it/1600x1000/dddddd/ffffff',
      title: 'Title here',
      description: 'Description here'
    }, {
      thumb: 'http://placehold.it/400x400',
      full: 'http://placehold.it/1600x1000',
      title: 'Title here',
      description: 'Description here'
    }, {
      thumb: 'http://placehold.it/400x400',
      full: 'http://placehold.it/1600x1000',
      title: 'Title here',
      description: 'Description here'
    }, {
      thumb: 'http://placehold.it/400x400',
      full: 'http://placehold.it/1600x1000',
      title: 'Title here',
      description: 'Description here'
    }, {
      thumb: 'http://placehold.it/400x400',
      full: 'http://placehold.it/1600x1000',
      title: 'Title here',
      description: 'Description here'
    }, {
      thumb: 'http://placehold.it/400x400',
      full: 'http://placehold.it/1600x1000',
      title: 'Title here',
      description: 'Description here'
    }, {
      thumb: 'http://placehold.it/400x400',
      full: 'http://placehold.it/1600x1000',
      title: 'Title here',
      description: 'Description here'
    }, {
      thumb: 'http://placehold.it/400x400',
      full: 'http://placehold.it/1600x1000',
      title: 'Title here',
      description: 'Description here'
    }]

    this.selected = this.images[0]
  }

  select(image) {
    this.captionOpen = true;
    this.selected = image;
  }

  closeCaption() {
    this.captionOpen = false;
  }
}