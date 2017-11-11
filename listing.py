#!/usr/bin/python3

import ts3

with ts3.query.TS3Connection("localhost") as ts3conn:
        try:
                ts3conn.login(
                        client_login_name="queryuser",
                        client_login_password="querypasswd"
                )
        except ts3.query.TS3QueryError as err:
                print("Login failed:", err.resp.error["msg"])
                exit(1)

        ts3conn.use(sid=1)

        kanaly = ts3conn.channellist(secondsempty=True)
        for kanal in kanaly.parsed:
            czas = str(int(int(kanal['seconds_empty'])/60/60/24))
            print(kanal['channel_name']+"\t"+str(czas))
