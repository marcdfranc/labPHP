import { Component, OnInit } from '@angular/core';
import { MatDialogRef } from '@angular/material/dialog';
import { Post } from '../post';

@Component({
	selector: 'app-post-dialog',
	templateUrl: './post-dialog.component.html',
	styleUrls: ['./post-dialog.component.css']
})
export class PostDialogComponent implements OnInit {

	public fileName: string = '';

	public data = {
		post: new Post("", "", "", "", ""),
		file: null
	}

	constructor(
		public dialogref: MatDialogRef<PostDialogComponent>
	) { }

	ngOnInit(): void {
	}

	fileChanged(event) {
		this.fileName = event.target.files[0].name;
		this.data.file = event.target.files[0];
	}

	save() {
		this.dialogref.close(this.data);
	}

	cancel() {
		this.dialogref.close(null);
	}

}
