import { Injectable } from '@angular/core';
import { Http, RequestOptionsArgs, Response, Headers } from '@angular/http';
import { Observable } from 'rxjs';

@Injectable()
export class ArticleService {
  private serverURL: string = "http://localhost:8888/api/content";
  private headers: Headers = new Headers(
    {
      'Accept': 'application/json',
      'Content-Type': 'application/hal+json'
    });
  constructor(private http: Http) { }

  getHeaders(options: RequestOptionsArgs):RequestOptionsArgs{
    let localOptions = {headers: this.headers};
    return Object.assign(localOptions, options);
  }

  getUrl(url: string): string {
    return this.serverURL + url;
  }

  getPosts():Observable<any>{
    return this.get('api/content').map(res => res.json()).catch(err => Observable.throw(err));
  }

  get(endpoint: string, options?: RequestOptionsArgs):Observable<Response>{
    let headers = this.getHeaders(options);
    let url = this.getUrl(endpoint);
    return this.http.get(url, headers);
  }
}
