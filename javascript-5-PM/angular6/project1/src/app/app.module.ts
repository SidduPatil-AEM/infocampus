import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

//for form activity
import { FormsModule } from '@angular/forms';
import {RouterModule,Routes} from '@angular/router';
//for client server communication
import {HttpModule} from '@angular/http';
import {HttpClientModule} from '@angular/common/http';

import { AppComponent } from './app.component';
import { UserComponent } from './user/user.component';
import { PhotoComponent } from './photo/photo.component';
import { HeaderComponent } from './header/header.component';
import { FooterComponent } from './footer/footer.component';
import { Array1Component } from './array1/array1.component';
import { Array2Component } from './array2/array2.component';
import { ContactusComponent } from './contactus/contactus.component';
import { Json1Component } from './json1/json1.component';
import { Json2Component } from './json2/json2.component';
import { CrudComponent } from './crud/crud.component';
//https://localhost:4502/contact
const mypage:Routes=[
      { path:"contact",component:ContactusComponent},
      { path:"array",component:UserComponent},
      { path:"json1",component:Json1Component},
      { path:"json1",component:Json2Component},
      { path:"crud",component:CrudComponent},
      { path:"photo",component:PhotoComponent},
      { path:"",redirectTo:"/array",pathMatch:'full'}
];

@NgModule({
  declarations: [
    AppComponent,
    UserComponent,
    PhotoComponent,
    HeaderComponent,
    FooterComponent,
    Array1Component,
    Array2Component,
    ContactusComponent,
    Json1Component,
    Json2Component,
    CrudComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    RouterModule.forRoot(mypage),
    HttpModule,
    HttpClientModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
