import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-array2',
  templateUrl: './array2.component.html',
  styleUrls: ['./array2.component.css']
})
export class Array2Component implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  user:any[] =[
    {"name":"1","city":"Bangalore","age":"30 Years"},
    {"name":"2","city":"Mangalore","age":"20 Years"}
  ];
  fullname:string;
  userage:string;
  usercity:string;
  saveuser(uname:string,city:string,age:string)
  {
      var newuser = {"name":uname,"city":city,"age":age}
      this.user=this.user.concat(newuser);
      this.fullname="";
      this.userage="";
      this.usercity="";
  }
  
  deluser(index:number)
  {
    this.user.splice(index,1);//to remove element of a given element
  }
}
