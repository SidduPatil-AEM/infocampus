import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-array1',
  templateUrl: './array1.component.html',
  styleUrls: ['./array1.component.css']
})
export class Array1Component implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  myUser:any[]=["User1"];
  username:string;//add
  saveuser(uname:string)
  {
      this.myUser.push(uname);
      this.username="";
  }
}
