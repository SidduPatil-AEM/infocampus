import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-user',
  templateUrl: './user.component.html',
  styleUrls: ['./user.component.css']
})
export class UserComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  user:any[] = [
    "User1","User2","User3","User4","User5","User6","User7"
  ];

  totalUser:number =this.user.length;

  user2:any[];
  showUser()
  {
    this.user2 = [
                  {"name":"Abc","city":"Bangalore"},
                  {"name":"Abc","city":"Bangalore"},
                  {"name":"Abc","city":"Bangalore"},
                  {"name":"Abc","city":"Bangalore"},
    ];
  } 
}
