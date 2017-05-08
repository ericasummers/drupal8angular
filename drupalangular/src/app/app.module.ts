import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { ArticleComponent } from './article/article.component';
import { AppComponent } from './app.component';
import { ArticleService } from './article.service';
import { RouterModule, Routes } from '@angular/router';


const appRoutes: Routes = [
  {path: 'article', component: ArticleComponent }
]

@NgModule({
  declarations: [
    AppComponent,
    ArticleComponent
  ],
  imports: [
    RouterModule.forRoot(appRoutes),
    BrowserModule,
    FormsModule,
    HttpModule
  ],
  providers: [ArticleService],
  bootstrap: [AppComponent]
})
export class AppModule { }
