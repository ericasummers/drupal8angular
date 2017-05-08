import { DrupalangularPage } from './app.po';

describe('drupalangular App', () => {
  let page: DrupalangularPage;

  beforeEach(() => {
    page = new DrupalangularPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
