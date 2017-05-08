import { Component, OnInit } from '@angular/core';
import { ArticleService } from '../article.service';

@Component({
  selector: 'app-article',
  templateUrl: './article.component.html',
  styleUrls: ['./article.component.css']
})
export class ArticleComponent implements OnInit {
  posts = [];

  constructor(private ArticleService: ArticleService) { }

  ngOnInit() {
    this.ArticleService.getPosts().subscribe(res => {
      this.posts = res;
      console.log(this.posts);
    }, err => {
      console.log(err);
    })
  }

}
