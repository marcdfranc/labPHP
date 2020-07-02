import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { BrowserAnimationsModule } from "@angular/platform-browser/animations";
import { MatButtonModule } from '@angular/material/button';
import { FormsModule, ReactiveFormsModule } from "@angular/forms";
import { FlexLayoutModule } from "@angular/flex-layout";
import { HttpClientModule } from "@angular/common/http";
import { MatInputModule } from "@angular/material/input";
import { MatSelectModule } from "@angular/material/select";
import { MatIconModule } from "@angular/material/icon";
import { MatToolbarModule } from "@angular/material/toolbar";
import { MatCardModule } from "@angular/material/card";
import { MatDividerModule } from "@angular/material/divider";
import { MatDialogModule } from "@angular/material/dialog";
import { MatChipsModule } from "@angular/material/chips";
import { MatBadgeModule } from "@angular/material/badge";

import { AppComponent } from './app.component';
import { PostComponent } from './post/post.component';
import { PostDialogComponent } from './post-dialog/post-dialog.component';
import { PostService } from "./post.service";

@NgModule({
	declarations: [
		AppComponent,
		PostComponent,
		PostDialogComponent
	],
	imports: [
		BrowserModule,
		BrowserAnimationsModule,
		FormsModule,
		ReactiveFormsModule,
		FlexLayoutModule,
		HttpClientModule,

		MatButtonModule,
		MatInputModule,
		MatSelectModule,
		MatIconModule,
		MatToolbarModule,
		MatCardModule,
		MatDividerModule,
		MatDialogModule,
		MatChipsModule,
		MatBadgeModule
	],
	providers: [
		PostService
	],
	entryComponents: [
		PostDialogComponent
	],
	bootstrap: [AppComponent]
})
export class AppModule { }
