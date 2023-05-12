import { Text, View, TouchableOpacity, FlatList } from "react-native";
import { AntDesign } from "@expo/vector-icons";
import { Entypo } from "@expo/vector-icons";
import { Ionicons } from "@expo/vector-icons";
import { useState, useEffect } from "react";
import * as SecureStore from "expo-secure-store";
import axios from "axios";
import { API_BASE_URL } from "../IP.js";

export default function ProjSites({ navigation }) {
    const [projects, setProjects] = useState([]);
    const [sites, setSites] = useState([]);

    useEffect(() => {
        fetchData();
    }, []);
    const fetchData = async () => {
        try {
            const token = await SecureStore.getItemAsync("token");
            if (!token) {
                navigation.navigate("Login");
            }
            await getProjSites(token);
        } catch (error) {
            // navigation.navigate("Login");
        }
    };

    const getProjSites = async (token) => {
        try {
            const response = await axios.get(`${API_BASE_URL}/api/sites`, {
                headers: {
                    Authorization: `Bearer ${token}`,
                },
            });
            const sensibilisations = response.data.sensibilisations;
            setSites(response.data.sites);
            setProjects(response.data.projets);
            return sensibilisations;
        } catch (error) {
            navigation.navigate("Login");
            return [];
        }
    };

    return (
        <View
            className="flex-1  "
            style={{
                backgroundColor: "#0C134F",
            }}
        >
            <View className="rounded-b-4xl w-full rounded-xl bg-white px-4 pt-10 ">
                <Text className="px-2 text-4xl font-semibold text-[#5C469C]">
                    Our Projet and Sites
                </Text>
            </View>
            <Text className="px-2 pt-2 text-center text-xl font-semibold text-gray-500">
                Our Sites
            </Text>
            <FlatList
                className="mx-4 flex-1"
                data={sites}
                keyExtractor={(item) => item.id}
                showsHorizontalScrollIndicator={false}
                showsVerticalScrollIndicator={false}
                renderItem={({ item }) => (
                    <TouchableOpacity className="m-3 rounded-2xl bg-white p-4 shadow-xl shadow-orange-300">
                        <View>
                            <View>
                                <Text className="text-dark text-xl font-semibold">
                                    {item.name}
                                </Text>
                                <Text className="text-center text-gray-500">
                                    {item.description}
                                </Text>
                                <Text className=" text-end text-gray-300">
                                    {item.created_at}
                                </Text>
                            </View>
                        </View>
                    </TouchableOpacity>
                )}
            />
            <Text className="px-2 text-center text-xl font-semibold text-gray-500">
                Our projectsr
            </Text>
            <FlatList
                className="mx-4  mb-14 flex-1"
                data={projects}
                keyExtractor={(item) => item.id}
                showsHorizontalScrollIndicator={false}
                showsVerticalScrollIndicator={false}
                renderItem={({ item }) => (
                    <TouchableOpacity className="m-3 rounded-2xl bg-white p-4 shadow-xl shadow-orange-300">
                        <View>
                            <View>
                                <Text className="text-xl font-semibold">
                                    {item.name}
                                </Text>
                                <Text className="text-center text-gray-500">
                                    {item.description}
                                </Text>
                                <Text className="text-center text-gray-500">
                                    {item.proj_start}
                                </Text>
                                <Text className=" text-end text-gray-300">
                                    {item.created_at}
                                </Text>
                            </View>
                        </View>
                    </TouchableOpacity>
                )}
            />

            <View className="absolute -bottom-0 h-14 w-full self-center rounded-2xl bg-white p-3 ">
                <View className="flex-row items-center  justify-center justify-items-center  space-x-10 align-middle">
                    <TouchableOpacity
                        onPress={() => navigation.navigate("Home_Screen")}
                    >
                        <AntDesign name="home" size={24} color="black" />
                    </TouchableOpacity>
                    <TouchableOpacity
                        onPress={() => navigation.navigate("UserTasksList")}
                    >
                        <Entypo name="list" size={24} color="black" />
                    </TouchableOpacity>

                    <TouchableOpacity
                        onPress={() => navigation.navigate("Add")}
                    >
                        <View className=" flex h-10 w-10 items-center justify-center rounded-full bg-[#FF0000]">
                            <AntDesign
                                name="pluscircleo"
                                size={28}
                                color="white"
                            />
                        </View>
                    </TouchableOpacity>

                    <TouchableOpacity
                        onPress={() => navigation.navigate("ProjSites")}
                    >
                        <Ionicons
                            name="chatbox-outline"
                            size={24}
                            color="black"
                        />
                    </TouchableOpacity>
                    <TouchableOpacity
                        onPress={() => navigation.navigate("Profile")}
                    >
                        <AntDesign name="user" size={26} color="black" />
                    </TouchableOpacity>
                </View>
            </View>
        </View>
    );
}
