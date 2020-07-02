import { Injectable } from '@angular/core';
import { HttpClient, HttpEvent, HttpEventType } from "@angular/common/http";
import { Post } from './post';

@Injectable({
	providedIn: 'root'
})
export class PostService {

	public posts: Post[] = [];
	//private baseUrl: string = 'http://localhost:8000';
	private baseUrl: string = '';

	constructor(private http: HttpClient) {

		this.http.get(`${this.baseUrl}/api/`).subscribe((posts: any[]) => {
			posts.map(p => this.posts.push(new Post(
				p.name,
				p.title,
				p.subtitle,
				p.email,
				p.message,
				p.file,
				p.id,
				p.likes
			)));
		});
	}

	save(post: Post, file: File) {
		const uploadData = new FormData();
		uploadData.append('name', post.name);
		uploadData.append('email', post.email);
		uploadData.append('title', post.title);
		uploadData.append('subtitle', post.subtitle);
		uploadData.append('message', post.message);
		uploadData.append('file', file, file.name);

		this.http.post('/api/', uploadData, {
			reportProgress: true,
			observe: 'events'
		}).subscribe((e: any) => {
			if (e.type == HttpEventType.Response) {
				let p = e.body;
				this.posts.push(new Post(
					p.name,
					p.title,
					p.subtitle,
					p.email,
					p.message,
					p.file,
					p.id,
					p.likes
				));
			}

			if (e.type == HttpEventType.UploadProgress) {
				console.log("Upload Progress.");
			}
		});
	}


	like(id: number) {
		this.http.get('/api/like/' + id, {
			observe: 'events'
		}).subscribe((e: any) => {
			const idPost = e.body ? e.body.id : null;
			if (idPost) {
				const post = this.posts.find(p => p.id == e.body.id);
				post.likes = e.body.likes;
			}
		});
	}

	delete(id: number) {
		this.http.delete('/api/' + id, {
			observe: 'events'
		}).subscribe((e: any) => {
			const index = this.posts.findIndex(p => p.id === id);
			if (index != -1) {
				this.posts.splice(index, 1);
			}
		});
	}

}
